# coding=utf-8
__author__ = 'Steven'

import os
import os.path
import re
import common
import mongodb
import hashlib
import datetime

import config

jingjixueren_model = mongodb.JingjixuerenModel()


def traverse_walk(path):
    for root, dirs, files in os.walk(path):
        for file in files:
            f_abspath = os.path.abspath(os.path.join(root, file))
            if os.path.getsize(f_abspath) > 90000 and re.search("\?", f_abspath) is None:
                handle_file(f_abspath)


def handle_file(file_path):
    print(file_path)
    article = {}
    file_object = open(file_path, "r", encoding="utf-8")
    try:
        file_content = str(file_object.read())
        file_content = re.sub("\n", '', file_content)

        article['file_id'] = hashlib.md5(
            datetime.datetime.now().strftime('%b-%d-%y %H:%M:%S').encode(encoding="utf-8") + file_path.encode(
                "utf-8")).hexdigest()

        article_content = common.str_split(config.Jingjixueren.split_tag['content'][0],
                                           config.Jingjixueren.split_tag['content'][1],
                                           file_content)

        article['path'] = file_path  # 文件本地存储路径

        for key in config.Jingjixueren.split_tag:
            if key is "from":
                article['from'] = re.sub(config.Jingjixueren.split_tag[key][0], config.Jingjixueren.split_tag[key][1],
                                         file_path)  # 文章来源
            if key is not "content" and key is not "from":
                article[key] = common.str_split(config.Jingjixueren.split_tag[key][0],
                                                config.Jingjixueren.split_tag[key][1],
                                                article_content)  # 分类
        article['time'] = article['time'][0:10]  # 时间截取

        # 去除正文中某些脏节点
        for key in config.Jingjixueren.sub_body_tag:
            article['body'] = re.sub(key, config.Jingjixueren.sub_body_tag[key], article['body'])

        if len(article['body']) > 1000:
            jingjixueren_model.insert_mongodb(article)
    finally:
        file_object.close()


traverse_walk(config.Jingjixueren.root_path)

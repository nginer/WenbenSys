# coding=utf-8
__author__ = 'Steven'

import os
import os.path
import re
import common
import mongodb

rootPath = "/home/work/source/jingjixueren/economist/news/"

jingjixueren_model = mongodb.JingjixuerenModel()


def traverse_walk(path):
    for root, dirs, files in os.walk(path):
        for file in files:
            f_abspath = os.path.abspath(os.path.join(root, file))
            f_name = os.path.basename(os.path.join(root, file))
            if os.path.getsize(f_abspath) > 100000 and re.search("\?", f_abspath) is None:
                read_file(f_abspath)


def read_file(file_path):
    print(file_path)
    article = {}
    file_object = open(file_path, "r", encoding="utf-8")
    try:
        file_content = str(file_object.read())
        file_content = re.sub("\n", '', file_content)
        # file_content = re.sub(r'\\','',file_content)
        article_content = common.start_end_str_split('<article itemscope itemtype="http://schema.org/Article">',
                                                     '</article>', file_content)
        article['path'] = file_path  # 文件本地存储路径

        article['from'] = re.sub("/home/work/source/jingjixueren/economist", "www.economist.com", file_path)  # 文章来源

        article['fenlei'] = common.start_end_str_split('<h2 class="fly-title" itemprop="alternativeHeadline">', '</h2>',
                                                       article_content)  # 分类
        article['title'] = common.start_end_str_split('<h3 itemprop="headline" class="headline">', '</h3>',
                                                      article_content)  # 标题
        article['subtitle'] = common.start_end_str_split('<h1 itemprop="alternateName" class="rubric">', '</h1>',
                                                         article_content)  # 二级标题

        article['time'] = common.start_end_str_split('dateTime="', '</time>', article_content)[0:10]  # 文章发表时间

        article_body = common.start_end_str_split('<div class="main-content" itemprop="articleBody">', '',
                                                  article_content)  # 正文

        # 去除正文中某些脏节点
        article_body = re.sub('<div .*?</div>', '', article_body)
        article_body = re.sub('</div>', '', article_body)
        article_body = re.sub('<aside.*?</aside>', '', article_body)
        article_body = re.sub('<img.*?/>', '', article_body)
        article_body = re.sub('<object.*?</object>', '', article_body)
        article_body = re.sub('<p class=.*?</p>', '', article_body)
        article_body = re.sub('<sup.*?</sup>', '', article_body)
        article_body = re.sub('<p></p>', '', article_body)
        article_body = re.sub('<p>&nbsp;</p>', '', article_body)

        article['body'] = article_body

        if len(article_body) > 1000:
            jingjixueren_model.insert_mongodb(article)
    finally:
        file_object.close()


traverse_walk(rootPath)

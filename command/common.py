__author__ = 'Steven'
import re


def start_end_str_split(start, end, base_str):
    if base_str is None:
        return None
    if start is not None and end is not None:
        if re.search(start, base_str) is not None and re.search(end, base_str) is None:
            str_list = re.split(start, base_str)
            return str_list[1]
        if re.search(start, base_str) is None and re.search(end, base_str) is not None:
            str_list = re.split(end, base_str)
            return str_list[0]
        if re.search(start, base_str) is not None and re.search(end, base_str) is not None:
            str_list = re.split(start, base_str)
            str_list = re.split(end, str_list[1])
            return str_list[0]
    return None

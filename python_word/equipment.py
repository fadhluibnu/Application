from ntpath import join
from operator import eq, index
from sre_constants import IN
from tkinter import E
from unittest import result
from wsgiref.simple_server import WSGIRequestHandler
from docx2python import docx2python


def equipment(path):
    doc_result = docx2python(path)

    detail_dhu = len(doc_result.text[1000:1700])
    text = doc_result.text
    equipmentName_arr = []
    index = 1000
    while index <= 1700:

        equipmentName = index
        if text[equipmentName] == "E" and text[equipmentName+1] == "q" and text[equipmentName+2] == "u" and text[equipmentName+3] == "i" and text[equipmentName+4] == "p" and text[equipmentName+5] == "m" and text[equipmentName+6] == "e" and text[equipmentName+7] == "n" and text[equipmentName+8] == "t" and text[equipmentName+9] == " " and text[equipmentName+10] == "n" and text[equipmentName+11] == "a" and text[equipmentName+12] == "m" and text[equipmentName+13] == "e":
            while equipmentName < 1300:
                if text[equipmentName] == "B" and text[equipmentName + 1] == "r" and text[equipmentName + 2] == "a" and text[equipmentName + 3] == "n" and text[equipmentName + 4] == "d":
                    break
                else:
                    equipmentName_arr.append(text[equipmentName])
                equipmentName += 1
        index += 1

    name = ""
    for value in equipmentName_arr:
        name += value

    name = name.split('\n')
    for i in name:
        if i == '':
            name.remove('')
            continue
        if i == ':':
            name.remove(':')
            continue
        if i == 'Equipment name':
            name.remove('Equipment name')
            continue

    result = ''.join(name)
    return result




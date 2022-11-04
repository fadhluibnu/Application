from unicodedata import name
from docx2python import docx2python


def brand(path):
    doc_result = docx2python(path)

    detail_dhu = len(doc_result.text[1700:2000])
    text = doc_result.text
    brand_arr = []
    index = 1000
    while index < 1700:
        brand_loop = index
        if text[brand_loop] == "B" and text[brand_loop + 1] == "r" and text[brand_loop + 2] == "a" and text[brand_loop + 3] == "n" and text[brand_loop + 4] == "d":
            while brand_loop < 1500:
                if text[brand_loop] == "T" and text[brand_loop + 1] == "y" and text[brand_loop + 2] == "p" and text[brand_loop + 3] == "e" and text[brand_loop + 4] == "/" and text[brand_loop + 5] == "M" and text[brand_loop + 6] == "o" and text[brand_loop + 7] == "d" and text[brand_loop + 8] == "e" and text[brand_loop + 9] == "l":
                    break
                else:
                    brand_arr.append(text[brand_loop])
                brand_loop += 1
        index += 1

    brand = ''
    for i in brand_arr:
        if i == '\n':
            brand_arr.remove('\n')
        brand += i

    brand = brand.split('\n')
    for i in brand:
        if i == 'Brand':
            brand.remove('Brand')

    for i in brand:
        if i == ':':
            brand.remove(':')

    for i in brand:
        if i == '':
            brand.remove('')
    return ''.join(brand)

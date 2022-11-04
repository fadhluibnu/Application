from operator import index
from textwrap import indent
from unittest import result
from docx2python import docx2python


def reportNumber(path):
    doc_result = docx2python(path)

    text = doc_result.text
    reportnum_arr = []
    index = 600
    while index < 1000:
        reportnum_loop = index
        if text[reportnum_loop] == "R" and text[reportnum_loop + 1] == "e" and text[reportnum_loop + 2] == "p" and text[reportnum_loop + 3] == "o" and text[reportnum_loop + 4] == "r" and text[reportnum_loop + 5] == "t" and text[reportnum_loop + 6] == " " and text[reportnum_loop + 7] == "N" and text[reportnum_loop + 8] == "o" and text[reportnum_loop + 9] == ".":
            while reportnum_loop < 1000:
                if text[reportnum_loop] == "E" and text[reportnum_loop + 1] == "L" and text[reportnum_loop + 2] == "E" and text[reportnum_loop + 3] == "C" and text[reportnum_loop + 4] == "T" and text[reportnum_loop + 5] == "R" and text[reportnum_loop + 6] == "O" and text[reportnum_loop + 7] == "M" and text[reportnum_loop + 8] == "A" and text[reportnum_loop + 9] == "G" and text[reportnum_loop + 10] == "N" and text[reportnum_loop + 11] == "E" and text[reportnum_loop + 12] == "T" and text[reportnum_loop + 13] == "I" and text[reportnum_loop + 14] == "C":
                    break
                else:
                    reportnum_arr.append(text[reportnum_loop])
                reportnum_loop += 1
        index += 1

    spk1 = ''
    for i in reportnum_arr:
        spk1 += i

    spk1 = spk1.split(':')

    for i in spk1:
        if i == 'Report No.':
            spk1.remove('Report No.')

    spk2 = ''
    for i in spk1:
        spk2 += i

    spk2 = spk2.split('/')

    no = spk2[0]
    tipe = spk2[2]
    tahun = spk2[3]

# menghapus spasi nomor
    no = no.split(' ')
    for i in no:
        if i == '':
            no.remove('')
    no = '' .join(no)

# menghapsu enter tahun
    tahun = tahun.split('\n')
    for i in tahun:
        if i == '':
            tahun.remove('')
    tahun = ''.join(tahun)
    result = "023/" + no + "/" + tipe + "/" + tahun
    return result

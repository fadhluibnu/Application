# import imp
import uuid
from connect import koneksi_db
from equipment import equipment
from brand import brand
from capacity import capacity
from spk import reportNumber
from tipe import TypeModel
from listMeasuring import list
import mysql.connector

# koneksi database
# config = mysql.connector.connect(
#     host="localhost",
#     user="root",
#     passwd="",
#     database="convert_laporan_coba"
# )
# cursor = config.cursor()


# identitas_id = uuid.uuid4().int
# path = 'word/052-EMC-2021.docx'


# def identitas(identitas_id, spk, perangkat, merek, tipe):
#     sql = "insert into identitas(identitas_id,spk,perangkat,merek,tipe) values(%s,%s, %s, %s, %s)"
#     val = (identitas_id, spk, perangkat, merek, tipe)
#     # cursor = koneksi_db().cursor()
#     # cursor.execute(sql, val)
#     # koneksi_db().commit()
#     cursor.execute(sql, val)
#     config.commit()


# identitas(str(identitas_id), str(reportNumber(path)), str(equipment(path)),
#           str(brand(path)), str(TypeModel(path)))


# def measuring():

print("SPK : " + reportNumber('word/052-EMC-2021.docx'))
print("Perangkat : " + equipment('word/052-EMC-2021.docx'))
print("Merek : " + brand('word/052-EMC-2021.docx'))
print("Tipe : "+TypeModel('word/052-EMC-2021.docx'))
x = list('word/052-EMC-2021.docx')
print(x)

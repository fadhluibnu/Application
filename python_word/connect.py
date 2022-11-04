import mysql.connector


def koneksi_db():
    config = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd="",
        database="convert_laporan_coba"
    )

    return config

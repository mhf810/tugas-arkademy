def beliMie(tanggal, uang):
    harga = 2500
    bonus = 0
    stok = uang//harga
    total = stok + bonus
    kembalian = uang - stok * harga

    # cek tanggal ganjil/genap
    if tanggal % 2 == 0:
        # gratis 1 buah mie tiap beli 4 buah mie
        bonus = bonus + stok // 4
    else:
        bonus = bonus + stok // 3

    # cek tanggal kelipatan 5
    if tanggal % 5 == 0:
        # cek bonusnya ganjil/genap
        if bonus % 2 == 0:
            bonus = bonus * 10
        else:
            bonus = bonus * 5

    # cek apakah uangnya pas
    if uang % harga == 0:
        return total
    else:
        return total, kembalian


budi = beliMie(16, 13000)
print(budi)

wawan = beliMie(25, 50000)
print(wawan)


# # masukkan uang & tanggal dari user
# try:
#     waktu = int(input("Masukkan tanggal: "))
#     bayar = int(input("Masukkan total uang: "))
#     print(beliMie(waktu, bayar))

# except:
#     print("Tanggal atau Uang yang Dimasukkan Salah!")

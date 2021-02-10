#**************** Problem Seti 4 ****************#
print("bu program tek sayılar içindeki en küçük sayıyı bulmanızı sağlar")
sayilist = []
adet = int(input('Kaç Sayı Girilecek: '))
for sayi in range(adet):
    rakam = int(input('Rakamları Gir: '))
    sayilist.append(rakam)
for sayi in sayilist:
    if sayi % 2 != 0:
        
        print("listedeki en büyük tek sayı :" , max(sayilist))

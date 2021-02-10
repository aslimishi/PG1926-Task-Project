#**************** Problem Seti 3 *****************#
def sifiriTasi(liste):
    for i in range(len(liste)):
        for j in range(len(liste) - i -1):
            if liste[j] > liste[j+1]:
                liste[j], liste[j + 1] = liste[j + 1], liste[j] 

sayiAdedi = int(input("Liste kaç sayıdan oluşacak: "))
liste = []

for i in range(sayiAdedi):
    liste.append(input())

sifiriTasi(liste)

print(liste)


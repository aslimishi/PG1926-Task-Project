#************* Problem Seti 1 **************#
number = int(100)

def fizzbuzz(number):
    n = 1
    while n <= 100:
        if n % 3 != 0 and n % 5 != 0:
            print(n)
        elif n % 3 == 0 and n % 5 == 0:
            print("fizzbuzz")
        elif n % 3 == 0:
            print("fizz")
        elif n % 5 == 0:
            print("buzz")
        n = n + 1
    return number

print (fizzbuzz(number))

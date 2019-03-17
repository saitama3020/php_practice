class Spam:
    def __init__(self, ham, egg):
        self.ham = ham
        self.egg = egg
    def output(self):
        sum = self.ham + self.egg
        print("{0}".format(sum))

spam = Spam(5,10)
spam.output()

class Base:
    basevalue = "base"
    def spam(self):
        print("Base.spam()")

    def ham(self):
        print("ham")


class Derived(Base):
    def spam(self):
        print("Derived.spam()")
        self.ham()

derived = Derived()
print("{0}".format(derived.basevalue))


class A:
    def method(self):
        print("class A")
class B:
    def method(self):
        print("class B")
class C(A):
    def method(self):
        print("class C")
class D(B,C):
    pass

d = D()
d.method()

class Spam:
    __attr = 100
    def __init__(self):
        self.__attr = 999
    def method(self):
        self.__method()
    def __method(self):
        print(self.__attr)

spam = Spam()
spam.method()
spam.__method()
spam.__attr

def fibo(n):
    result = []
    a = 1
    b = 1

    while b < n:
        result.append(b)
        val = a + b
        b = a
        a = val
    return result

if __name__ == "__main__":
    print("{0}".format((fibo(100))))

import fibionatti

print("{0}".format(fibonatti.fibo(100)))

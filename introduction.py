
class DS(object):
    def __init__(self,l=[]):
        self.l=l
    def getlist(self):
        for i in range(0,9):
            self.l.append(i)
        print(self.l)
    def getlen(self):
        return len(self.l)  
    def __reversed__(self):
        return self.l.__len__()#get the length of the list

k=DS([])
k.getlist()                
print(k.getlen())
print(k.__reversed__())


class Customsequence(object):
    #functions 
    normal_list=[2,4,5,6,7,9]
    def __init__(self):
        pass
    def printBackwords(self,normal_list):
        return normal_list.reverse()
obj=Customsequence()
print(obj.printBackwords(normal_list=[2,3,4,5,6,7]))

#using the init method
class computer:
    def __init__(self,cpu,ram,hdd):
        #called automatically 
        self.cpu=cpu
        self.ram=ram
        self.hdd=hdd
    def specs(self):
        print(self.cpu,self.ram,self.hdd)
comp_one=computer('i5','16gb','1Tb')#creating an object
comp_two=computer('i3','8gb','500Gb')
#each object has its own data 
#init makes each object to have its own values 

comp_one.specs()
comp_two.specs()#use this 
#comp_one obj will be taken as a parameter

"""
-attributes are the variables 
-behaviour are the methods
-we use classes te create new objects

"""
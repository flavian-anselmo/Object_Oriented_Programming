class car:
    def __init__(self,speedLimit,milage,make):
        
        #the init method will make  unique variables
        # our init creates four attribute instances  
        self.make=make
        self.speedLimit=speedLimit
        self.milage=milage
        self.make=make
    def car_specs(self):
        print(self.speedLimit,self.milage,self.make)
#create objects
"""
each car has its own specs 
__init__ assigns each object its specifications
creating a new object is called instantiating an object 
syntax{
    obj=class(parameters)
    obj.func()
}

"""
toyota=car('180km/h','918291','Demio')
subaru=car('500km/h','382402','Vitz')
toyota.car_specs()
subaru.car_specs()
"""
one can fetch a single attribute of the object 
by using the syntax {
    obj.attribute
}
"""
print(toyota.make)
            

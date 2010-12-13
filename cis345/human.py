# Human class for final exam
# Diwant Vaidya
# 2010.12.10
class Human:
	def __init__(self,name):
		self.name = name
		self.wealth = 100
	def printMe(self):
		print "Hi I am "+self.name+" and I have $"+self.wealth

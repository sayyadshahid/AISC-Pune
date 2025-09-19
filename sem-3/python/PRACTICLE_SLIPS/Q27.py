# 2. Create a class named Country with: county_name and
# A method to accept a nationality as a string from the user.
# Another method to print the nationality. printNationality() to display the nationality.
# Create a subclass named State that inherits from Country.
# # Add a method to accept and print the state name, called printState()

class Country:
    def __init__(self):
        self.nationality = ""

    def acceptNationality(self):
        self.nationality = input("Enter your nationality: ")

    def printNationality(self):
        print("Nationality:", self.nationality)


class State(Country):
    def __init__(self):
        super().__init__()
        self.state_name = ""

    def acceptState(self):
        self.state_name = input("Enter your state name: ")

    def printState(self):
        print("State Name:", self.state_name)

 
obj = State()           
obj.acceptNationality()     
obj.printNationality()        

obj.acceptState()          
obj.printState()             

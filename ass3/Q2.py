class Country:
    def __init__(self, nationality):
        self.nationality = nationality

    def get_nationality(self):
        return self.nationality

class State(Country):
    def __init__(self, nationality, state):
        super().__init__(nationality)
        self.state = state

    def all_name(self):
        return f"{self.nationality} + {self.state}"

count = State("national", "maha")
p = count.all_name()


national_obj = Country("shahid")
national = national_obj.get_nationality()

print(national)
print(p)

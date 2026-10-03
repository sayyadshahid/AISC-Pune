def diffie():
    p = 23
    g = 5

    a = 7
    b = 12

    A = (g ** a) % p  
    B = (g ** b) % p 

    ali = (B ** a) % p
    bob = (A ** b) % p



    print("Prime Number (p):", p)
    print("Generator (g):", g)

    print("\nAlice's Public Key:", A)
    print("Bob's Public Key:", B)

    print("\nAlice's Shared Secret Key:", ali)
    print("Bob's Shared Secret Key:", bob)

    if ali == bob:
        print("\nKey Exchange Successful!")
    else:
        print("\nKey Exchange Failed!")

diffie()
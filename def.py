import hashlib

msg = "shahid"

enc = hashlib.sha256(msg.encode()).hexdigest()

print(enc, "============")

import os


dir = "encFiles/"
fileList = ""
for root, dirs, files in os.walk(dir):
    for filename in files:
        if fileList != "":
            fileList += ","
        fileList += filename
print(fileList)


import requests
from bs4 import BeautifulSoup
from time import sleep

def getdata():
    url = "http://localhost/robot/get_robot_data.php"
    a = requests.get(url)
    soup = BeautifulSoup(a.content)
    m1 = int(soup.find(id="m1").text)
    m2 = int(soup.find(id="m2").text)
    m3 = int(soup.find(id="m3").text)
    m4 = int(soup.find(id="m4").text)
    m5 = int(soup.find(id="m5").text)
    m6 = int(soup.find(id="m6").text)
    state = soup.find(id="state").text
    return [m1, m2, m3, m4, m5, m6, state]

def excuteNow(data):
    #Your code here
    return True

if __name__ == '__main__':
    d = "dump"
    while True:
        if d != getdata():
            d = getdata()
            excuteNow(d)
            print(d)
        sleep(0.1)

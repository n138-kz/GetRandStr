import requests
response = requests.get('https://labs.n138.jp/GetRandStr/api/?chr=11&len=16')
if int(response.status_code) != 200:
	print('Error! HTTP status is ' + str(response.status_code))
	exit()

import json
response = json.loads(response.text)
if response['result'] != True:
	print('Error! Parse error')
	exit()

response = response['detail']
print(response)

import pyperclip
pyperclip.copy(response)

# https://python.civic-apps.com/http-request-post-get/
# https://docs.python.org/ja/3/library/json.html
# https://tonari-it.com/python-clipboard-pyperclip-copy/#toc4
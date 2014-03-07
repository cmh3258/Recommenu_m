'''

This script is to save the menus
    -will need to take in the dictionary
    -save as a string
    -send to database

Chris Hume
3/4/14
(For SXSW deadline)


'''


import foursquare, json, requests
import logging
logging.basicConfig()

full_str = sys.argv[0]
print full_str

'''

str = '{"name":"venue name","menus":[{"name":"menu nanme","sections":[{"name":"section name","entries":[{"name":"hotdog","description":"bread and sausage","price":6.88}]}]}]}'
try:
    json.loads(str)
    print 'JSON Loaded str'
else:
    print 'Error Loading JSON
'''
#r = requests.post("http://glacial-ravine-3577.herokuapp.com/api/v1/venue/", str)
'''
print r.text


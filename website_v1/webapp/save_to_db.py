'''

This script is to save the menus
    -will need to take in the dictionary
    -save as a string
    -send to database

Chris Hume
3/4/14
(For SXSW deadline)


'''

import foursquare, json, requests, sys
import logging
from bs4 import BeautifulSoup
from urllib2 import urlopen
logging.basicConfig()

full_str = sys.argv[1]
print sys.argv

print "hellof"
print "hello"


#full_str = '{"name":"Carla Fabulous\' Twilight Lounge","foursquare_venue_id":"4f887defe4b05ae887fa3ed8","menus":[{"name":"Main Menu","sections":[{"name":"burgeers","entries":[{"name":"item 1","description":"help","price":3},{"name":"item 2","description":"bad","price":8}]}]}]}'
try:
    json.loads(full_str)
    print 'JSON Loaded str'
except:
    print 'Error Loading JSON'

r = requests.post("http://glacial-ravine-3577.herokuapp.com/api/v1/venue/", full_str)
print r.text
print 'You Won'




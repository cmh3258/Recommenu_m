'''

This script is used in the web application. The user
enters in a fsid and gets the restaurant name. 

Chris Hume
2/15/15


'''


import foursquare, json, requests, sys
import logging
from bs4 import BeautifulSoup
from urllib2 import urlopen
logging.basicConfig()

#print 'hello world'

client_id = "YZVWMVDV1AFEHQ5N5DX4KFLCSVPXEC1L0KUQI45NQTF3IPXT"
client_secret="2GA3BI5S4Z10ONRUJRWA40OTYDED3LAGCUAXJDBBEUNR4JJN"
callback=''

fsid = sys.argv[1]

client = foursquare.Foursquare(client_id, client_secret, redirect_uri='http://fondu.com/oauth/authorize')
auth_uri = client.oauth.auth_url()
#print 'new'
r = requests.get("https://api.foursquare.com/v2/venues/"+fsid+"?client_secret=2GA3BI5S4Z10ONRUJRWA40OTYDED3LAGCUAXJDBBEUNR4JJN&client_id=YZVWMVDV1AFEHQ5N5DX4KFLCSVPXEC1L0KUQI45NQTF3IPXT&v=20131017")
data = r.text
soup = BeautifulSoup(data)
js = json.loads(data)

print js['response']['venue']['id']
print js['response']['venue']['name']

#print 'end'
'''
name = sys.argv[1]
location = sys.argv[2]
print name
print location

result = client.venues.search(params={'query':'Chipotle', 'near':'Austin,Tx', 'llAcc':'100.0', 'limit': '10', 'categoryID' : '4d4b7105d754a06374d81259'})
#print result
print 'start'
for key in result:
    print 'From FS: '
    #print key, ':', result[key]
    bob = result[key]
    for item in bob:
            #print ' '
            #print item
            #if am_zip in item:
            #	print 'YESIRISE IFJEWL'
            found = False
            for b in item:
		#print b, ':', item[b]
		if b == 'name':
                    #print b, ' : ', item[b], ' : ', am_name 
                    #if item[b] == am_name:
                    #	fs_name = am_name	
                    fs_name = item[b]
                    print 'fs_name: ', fs_name
		if b == 'id':
                    #print b, ':', item[b]
                    fs_id = item[b].strip()
                    print 'fs_name:', fs_id
                    #outfile.write(b + ' : ' + item[b] + '\n---\n')

		    #print am_name , ' : ', fs_name 
                    #print am_zip , ' : ', fs_zip 
                    #print am_address , ' : ', fs_address 
                    #print am_id , ' : ', fs_id 
                    #printnt fs_name, '\n', fs_address, '\n', fs_zip, '\n', fs_id, '\n'
                    fs_name = fs_name.strip()
                    #fs_zip = fs_zip.strip()
		    #fs_id = fs_id.strip()



infile = open("boston_fsid_final_chains.txt", "r")
outfile = open("boston_fsid_final_chains_1.txt","a")

#dictionary= { fs_id , name }
dict_fs = {}
key_count = 0
for line in infile:
    line = line.strip()
    line = line.split(",")
    try:
        dict_fs[line[0]] = line[1]
        key_count += 1
    except:
        pass

#go through and call menu
print 'Keys: ', key_count
for fsid, name in dict_fs.items():
    r = requests.get("https://api.foursquare.com/v2/venues/"+fsid+"/menu?client_secret=2GA3BI5S4Z10ONRUJRWA40OTYDED3LAGCUAXJDBBEUNR4JJN&client_id=YZVWMVDV1AFEHQ5N5DX4KFLCSVPXEC1L0KUQI45NQTF3IPXT")
    key_count -= 1
    print 'Received. Keys left: ', key_count, " ", name
    data = r.text
    soup = BeautifulSoup(data)
    js = json.loads(data)
    #print data

    #print js['response']['menu']['menus']['items'][0]['menuId']
    first_true = True
    save_this = False
    first_count = 0
    item_name = ""
    item_id = 0
    while(first_true):
        sec_count = 0
        sec_true = True
        try:
            js['response']['menu']['menus']['items'][0]['entries']['items'][first_count]['name']  
        except:
            first_true = False
            break
        while(sec_true):
            #save the id and anme
            try:
                item_id = js['response']['menu']['menus']['items'][0]['entries']['items'][first_count]['entries']['items'][sec_count]['entryId'] 
                item_name = js['response']['menu']['menus']['items'][0]['entries']['items'][first_count]['entries']['items'][sec_count]['name']
                sec_count += 1
                #save_this = True
            except:
                sec_true = False
                print 'excetion'
            try:
                print name, " ;" ,item_id[0], " ; ", item_name
            except:
                pass
        #print save_this
        #print name, " ", fsid

        #will save the restaurant if can get the menu
        try:
            outfile.write(fsid + "," + name + "\n")
        except:
            pass
        first_count += 1
    print 'Done'
outfile.close()

#reduce the outfile if duplicates were added
lines_seen = set() # holds lines already seen
outfile = open("boston_fsid_final_chains_final.txt", "a")
for line in open("boston_fsid_final_chains_1.txt", "r"):
    if line not in lines_seen: # not a duplicate
        outfile.write(line)
        lines_seen.add(line)
outfile.close()

'''







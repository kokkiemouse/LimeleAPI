import requests as r

API = "https://riyblog.shop/limele/v2"
URL = "https://limu.ml"

print(r.get(API+"?url="+URL).json()["url"])

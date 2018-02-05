require 'open-uri'
require 'json'

URL = 'https://restcountries.eu/rest/v2/all'

def get_data_open_uri
	data = open('https://restcountries.eu/rest/v2/all')
	response_status = data.status #obtienes el estado de la peticion
	response_body = data.read #obtienes el json
	result = JSON.parse(response_body) #parseas el json
	i = 1
	result.each do |countries|
		puts "#{i} - #{countries['name']}"
  		i += 1
	end
end


get_data_open_uri
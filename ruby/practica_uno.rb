require 'mechanize'

page = Mechanize.new

page = page.get('https://www.cuc.edu.co/')

page.search('#showcase_inner')
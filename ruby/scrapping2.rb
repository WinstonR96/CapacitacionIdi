require 'nokogiri'
require 'open-uri'

#ARIS JULIO
def get_posts(url)
  document = Nokogiri::HTML(open(url))
  section = document.css('section.blog-featured')
  section.css('div.items-row')
end

def get_html(posts, url)
  html = ''
  posts.each do |post|
    title = post.css('h2').text.strip
    image = url + post.css('div.img-intro-none img').attr('src')
    description = post.css('div.rt-custom-blog p').text.strip
    html += "<h1>#{title}</h1>
      <center><img src='#{image}' width='300' height='300'></center>
      <p>#{description}</p>"
  end
  html
end

def save_file(route, text)
  file = File.open(route, 'w')
  file.write(text)
  file.close
end

url = 'http://soytecnoprofe.com'
route = 'E:\ejemplito.html'
posts = get_posts(url)
html = get_html(posts, url)
save_file(route, html)
puts "Archivo guardado en #{route}"

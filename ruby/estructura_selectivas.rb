#Estructura selectiva
puts "Dame un nombre"
nombre = gets.chomp.to_s
puts "El nombre ingresado es #{nombre}"

#usando If
if nombre == "Winston" then
	puts "IF-ELIF-ELSE\nNombre ingresado #{nombre}"
elsif nombre == "Evelin" then
	puts "IF-ELIF-ELSE\nNombre ingresado #{nombre}"
else
	puts "IF-ELIF-ELSE\nNombre ingresado no reconocido"
end

#usando case

case nombre
	when "Winston"
	puts "Case\nNombre ingresado #{nombre}"
	when "Evelin"
	puts "Case\nNombre ingresado #{nombre}"
else
	puts "Case\nNombre ingresado no reconocido"
end

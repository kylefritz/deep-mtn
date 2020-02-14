json.guests @guests.map do |guest|
  json.partial! "guests/guest.json.jbuilder", guest: guest
end

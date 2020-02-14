ActiveAdmin.register Guest do
  permit_params :name1, :name2, :email1, :email2, :priority, :rsvp
  config.sort_order = "LOWER(name1)"
end

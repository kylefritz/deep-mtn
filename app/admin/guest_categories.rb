ActiveAdmin.register GuestCategory do
  permit_params :name
  config.sort_order = "LOWER(name)"
end

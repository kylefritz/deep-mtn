ActiveAdmin.register Page do
  permit_params :name
  config.sort_order = "LOWER(name)"
end

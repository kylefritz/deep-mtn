ActiveAdmin.register ContentType, as: "Type" do
  permit_params :name
  config.sort_order = "LOWER(name)"
end

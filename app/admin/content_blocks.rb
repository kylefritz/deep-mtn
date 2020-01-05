ActiveAdmin.register ContentBlock do
  permit_params :page, :name, :content
  config.sort_order = "LOWER(page), LOWER(name)"

  # form do |f|
  #   inputs "Details" do
  #     input :page
  #     input :name
  #     input :content do
  #       f.rich_text_area :content
  #     end
  #   end
  #   actions
  # end

end

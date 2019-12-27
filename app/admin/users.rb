ActiveAdmin.register User do
  permit_params :first_name, :last_name, :email, :additional_email, :is_admin, \
    :phone
  config.sort_order = "LOWER(first_name), LOWER(last_name)"

  # search filters on index page
  preserve_default_filters!
  remove_filter :messages, :versions, :visits, \
    :created_at, :current_sign_in_at, :current_sign_in_ip, :encrypted_password, \
    :last_sign_in_at, :last_sign_in_ip, :remember_created_at, :reset_password_sent_at, \
    :reset_password_token, :sign_in_count, :updated_at

  scope :all, default: true
  scope :owners
  scope :admin

  index do
    selectable_column
    column :first_name do |user|
      span user.first_name
      if user.is_admin?
        status_tag true, style: "margin-left: 3px", label: "admin"
      end
    end
    column :last_name
    column :email do |user|
      para auto_link user, user.email
      small user.additional_email
    end
    column :phone do |user|
      number_to_phone(user.phone)
    end
    column :created_at
    column :updated_at
    actions
  end

  form do |f|
    inputs "Details" do
      input :first_name
      input :last_name
      input :email
      input :additional_email
      input :phone
    end
    inputs "Danger Zone" do
      input :is_admin
    end
    actions
  end

  show do |user|
    attributes_table do
      row :name
      row :email do |user|
        div strong user.email
        small user.additional_email
      end
      row :phone do |user|
        number_to_phone(user.phone)
      end
      row :is_admin
      row :created_at
      row :updated_at
    end

    panel "Emails" do
      table_for user.messages do
        column "menu" do |email|
          auto_link email.menu
        end
        column :sent_at
        column :opened_at
        column :clicked_at
        column :to
        column :subject
        column :mailer
      end
    end

    active_admin_comments
  end

  actions :all, except: [:destroy] # deleting users can orphan orders, etc
end

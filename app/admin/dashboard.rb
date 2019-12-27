ActiveAdmin.register_page "Dashboard" do
  menu priority: 1, label: "mwedding"

  content title: "mwedding" do
    columns do
      column do
        panel "mmmmwedding" do
        end
      end
    end # columns

    columns do
      column do
        panel "Recently updated content" do
          table_for PaperTrail::Version.order("id desc").limit(20) do
            column("Object") { |v| v.item }
            column("Type") { |v| v.item_type.underscore.humanize }
            column("Modified at") do |v|
              link_to(v.created_at.to_s(:long), admin_version_path(v.id))
            end
            column("User") do |v|
              User.find_by(id: v.whodunnit)&.first_name.presence || "whodunnit: '#{v.whodunnit}'"
            end
          end
        end
      end
    end # columns
  end # content
end

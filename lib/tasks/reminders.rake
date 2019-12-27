namespace :reminders do
  desc "Reminder thing"
  task thing: :environment do
    if Setting.automated_reminder_emails?
      # SendHaventOrderedReminderJob.perform_now
    else
      Rails.logger.warn "automated_reminder_emails disabled; skipping"
    end
  end
end

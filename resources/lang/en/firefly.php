<?php

return [
    // general stuff:
    'test'                             => 'You have selected English.',
    'close'                            => 'Close',
    'pleaseHold'                       => 'Please hold...',
    'actions'                          => 'Actions',
    'edit'                             => 'Edit',
    'delete'                           => 'Delete',
    'welcomeBack'                      => 'What\'s playing?',
    'everything'                       => 'Everything',
    'customRange'                      => 'Custom range',
    'apply'                            => 'Apply',
    'cancel'                           => 'Cancel',
    'from'                             => 'From',
    'to'                               => 'To',
    'showEverything'                   => 'Show everything',
    'never'                            => 'Never',
    'search_results_for'               => 'Search results for ":query"',
    'bounce_error'                     => 'The message sent to :email bounced.',
    'removed_amount' => 'Removed :amount',
    'added_amount' => 'Added :amount',

    // attachments
    'nr_of_attachments'                => 'One attachment|:count attachments',
    'attachments'                      => 'Attachments',
    'edit_attachment'                  => 'Edit attachment ":name"',
    'update_attachment'                => 'Update attachment',
    'delete_attachment'                => 'Delete attachment ":name"',
    'attachment_deleted'               => 'Deleted attachment ":name"',
    'upload_max_file_size'             => 'Maximum file size: :size',

    // tour:
    'prev'                             => 'Prev',
    'next'                             => 'Next',
    'end-tour'                         => 'End tour',
    'pause'                            => 'Pause',

    // transaction index
    'title_expenses'                   => 'Expenses',
    'title_withdrawal'                 => 'Expenses',
    'title_revenue'                    => 'Revenue / income',
    'title_deposit'                    => 'Revenue / income',
    'title_transfer'                   => 'Transfers',
    'title_transfers'                  => 'Transfers',

    // csv import:
    'csv_import'                       => 'Import CSV file',
    'csv'                              => 'CSV',
    'csv_index_title'                  => 'Upload and import a CSV file',
    'csv_define_column_roles'          => 'Define column roles',
    'csv_map_values'                   => 'Map found values to existing values',
    'csv_download_config'              => 'Download CSV configuration file.',
    'csv_index_text'                   =>
        'This form allows you to import a CSV file with transactions into Firefly. It is based on the excellent CSV importer made by' .
        ' the folks at <a href="https://www.atlassian.com/">Atlassian</a>. Simply upload your CSV file and follow the instructions.' .
        ' If you would like to learn more, please click on the <i class="fa fa-question-circle"></i> button at the top of this page.',
    'csv_index_beta_warning'           => 'This tool is very much in beta. Please proceed with caution',
    'csv_header_help'                  => 'Check this box when your CSV file\'s first row consists of column names, not actual data',
    'csv_date_help'                    => 'Date time format in your CSV. Follow the format like <a href="https://secure.' .
                                          'php.net/manual/en/datetime.createfromformat.php#refsect1-datetime.createfromformat-parameters">this' .
                                          ' page</a> indicates. The default value will parse dates that look like this: ' . date('Ymd'),
    'csv_csv_file_help'                => 'Select the CSV file here. You can only upload one file at a time',
    'csv_csv_config_file_help'         => 'Select your CSV import configuration here. If you do not know what this is, ignore it. It will be explained later.',
    'csv_upload_button'                => 'Start importing CSV',
    'csv_column_roles_title'           => 'Define column roles',
    'csv_column_roles_text'            =>
        'Firefly does not know what each column means. You need to indicate what every column is. Please check out the example '
        . 'data if you\'re not sure yourself. Click on the question mark (top right of the page) to learn what'
        . ' each column means. If you want to map imported data onto existing data in Firefly, use the checkbox. '
        . 'The next step will show you what this button does.',
    'csv_column_roles_table'           => 'Column roles',
    'csv_column'                       => 'CSV column',
    'cvs_column_name'                  => 'CSV column name',
    'cvs_column_example'               => 'Column example data',
    'cvs_column_role'                  => 'Column contains?',
    'csv_do_map_value'                 => 'Map value?',
    'csv_continue'                     => 'Continue to the next step',
    'csv_go_back'                      => 'Go back to the previous step',
    'csv_map_title'                    => 'Map found values to existing values',
    'csv_map_text'                     =>
        'This page allows you to map the values from the CSV file to existing entries in your database. This ensures that accounts and other'
        . ' things won\'t be created twice.',
    'cvs_field_value'                  => 'Field value from CSV',
    'csv_field_mapped_to'              => 'Must be mapped to...',
    'csv_download_config_title'        => 'Download CSV configuration',
    'csv_download_config_text'         => 'Everything you\'ve just set up can be downloaded as a configuration file. Click the button to do so.',
    'csv_more_information_text'        => 'If the import fails, you can use this configuration file so you don\'t have to start all over again.'
                                          . ' But, if the import succeeds, it will be easier to upload similar CSV files.',
    'csv_do_download_config'           => 'Download configuration file.',
    'csv_empty_description'            => '(empty description)',
    'csv_upload_form'                  => 'CSV upload form',
    'csv_index_unsupported_warning'    => 'The CSV importer is yet incapable of doing the following:',
    'csv_unsupported_map'              => 'The importer cannot map the column ":columnRole" to existing values in the database.',
    'csv_unsupported_value'            => 'The importer does not know how to handle values in columns marked as ":columnRole".',
    'csv_cannot_store_value'           => 'The importer has not reserved space for columns marked ":columnRole" and will be incapable of processing them.',
    'csv_process_title'                => 'CVS import finished!',
    'csv_process_text'                 => 'The CVS importer has finished and has processed :rows rows',
    'csv_row'                          => 'Row',
    'csv_import_with_errors'           => 'There was one error.|There were :errors errors.',
    'csv_error_see_logs'               => 'Check the log files to see details.',
    'csv_process_new_entries'          => 'Firefly has created :imported new transaction(s).',
    'csv_start_over'                   => 'Import again',
    'csv_to_index'                     => 'Back home',
    'csv_do_not_map'                   => 'Do not map this value',
    'csv_upload_not_writeable'         => 'Cannot write to the path mentioned here. Cannot upload',

    'csv_column__ignore'               => '(ignore this column)',
    'csv_column_account-iban'          => 'Asset account (IBAN)',
    'csv_column_account-id'            => 'Asset account  ID (matching Firefly)',
    'csv_column_account-name'          => 'Asset account (name)',
    'csv_column_amount'                => 'Amount',
    'csv_column_bill-id'               => 'Bill ID (matching Firefly)',
    'csv_column_bill-name'             => 'Bill name',
    'csv_column_budget-id'             => 'Budget ID (matching Firefly)',
    'csv_column_budget-name'           => 'Budget name',
    'csv_column_category-id'           => 'Category ID (matching Firefly)',
    'csv_column_category-name'         => 'Category name',
    'csv_column_currency-code'         => 'Currency code (ISO 4217)',
    'csv_column_currency-id'           => 'Currency ID (matching Firefly)',
    'csv_column_currency-name'         => 'Currency name (matching Firefly)',
    'csv_column_currency-symbol'       => 'Currency symbol (matching Firefly)',
    'csv_column_date-rent'             => 'Rent calculation date',
    'csv_column_date-transaction'      => 'Date',
    'csv_column_description'           => 'Description',
    'csv_column_opposing-iban'         => 'Opposing account (IBAN)',
    'csv_column_opposing-id'           => 'Opposing account ID (matching Firefly)',
    'csv_column_opposing-name'         => 'Opposing account (name)',
    'csv_column_rabo-debet-credit'     => 'Rabobank specific debet/credit indicator',
    'csv_column_sepa-ct-id'            => 'SEPA Credit Transfer end-to-end ID',
    'csv_column_sepa-ct-op'            => 'SEPA Credit Transfer opposing account',
    'csv_column_sepa-db'               => 'SEPA Direct Debet',
    'csv_column_tags-comma'            => 'Tags (comma separated)',
    'csv_column_tags-space'            => 'Tags (space separated)',
    'csv_specifix_RabobankDescription' => 'Select this when you\'re importing Rabobank CSV export files.',
    'csv_specifix_Dummy'               => 'Checking this has no effect whatsoever.',
    'csv_import_account_help'          => 'If your CSV file does NOT contain information about your asset account(s), use this dropdown to select to which' .
                                          ' account the transactions in the CSV belong to.',


    // create new stuff:
    'create_new_withdrawal'            => 'Create new withdrawal',
    'create_new_deposit'               => 'Create new deposit',
    'create_new_transfer'              => 'Create new transfer',
    'create_new_asset'                 => 'Create new asset account',
    'create_new_expense'               => 'Create new expense account',
    'create_new_revenue'               => 'Create new revenue account',
    'create_new_piggy_bank'            => 'Create new piggy bank',
    'create_new_bill'                  => 'Create new bill',

    // currencies:
    'create_currency'                  => 'Create a new currency',
    'edit_currency'                    => 'Edit currency ":name"',

    // new user:
    'submit'                           => 'Submit',
    'getting_started'                  => 'Getting started',
    'to_get_started'                   => 'To get started with Firefly, please enter your current bank\'s name, and the balance of your checking account:',
    'savings_balance_text'             => 'If you have a savings account, please enter the current balance of your savings account:',
    'cc_balance_text'                  => 'If you have a credit card, please enter your credit card\'s limit.',

    // forms:
    'mandatoryFields'                  => 'Mandatory fields',
    'optionalFields'                   => 'Optional fields',
    'options'                          => 'Options',
    'something'                        => 'Something!',

    // budgets:
    'create_new_budget'                => 'Create a new budget',
    'store_new_budget'                 => ' Store new budget',
    'availableIn'                      => 'Available in :date',
    'transactionsWithoutBudget'        => 'Expenses without budget',
    'transactionsWithoutBudgetDate'    => 'Expenses without budget in :date',
    'createBudget'                     => 'New budget',
    'inactiveBudgets'                  => 'Inactive budgets',
    'without_budget_between'           => 'Transactions without a budget between :start and :end',
    'budget_in_month'                  => ':name in :month',
    'delete_budget'                    => 'Delete budget ":name"',
    'edit_budget'                      => 'Edit budget ":name"',
    'update_amount'                    => 'Update amount',

    // bills:
    'delete_bill'                      => 'Delete bill ":name"',
    'edit_bill'                        => 'Edit bill ":name"',

    // accounts:
    'details_for_asset'                => 'Details for asset account ":name"',
    'details_for_expense'              => 'Details for expense account ":name"',
    'details_for_revenue'              => 'Details for revenue account ":name"',
    'details_for_cash'                 => 'Details for cash account ":name"',

    'store_new_asset_account'          => 'Store new asset account',
    'store_new_expense_account'        => 'Store new expense account',
    'store_new_revenue_account'        => 'Store new revenue account',

    'edit_asset_account'               => 'Edit asset account ":name"',
    'edit_expense_account'             => 'Edit expense account ":name"',
    'edit_revenue_account'             => 'Edit revenue account ":name"',

    'delete_asset_account'             => 'Delete asset account ":name"',
    'delete_expense_account'           => 'Delete expense account ":name"',
    'delete_revenue_account'           => 'Delete revenue account ":name"',

    'asset_deleted'                    => 'Successfully deleted asset account ":name"',
    'expense_deleted'                  => 'Successfully deleted expense account ":name"',
    'revenue_deleted'                  => 'Successfully deleted revenue account ":name"',

    'update_asset_account'             => 'Update asset account',
    'update_expense_account'           => 'Update expense account',
    'update_revenue_account'           => 'Update revenue account',

    'make_new_asset_account'           => 'Create a new asset account',
    'make_new_expense_account'         => 'Create a new expense account',
    'make_new_revenue_account'         => 'Create a new revenue account',

    'asset_accounts'                   => 'Asset accounts',
    'expense_accounts'                 => 'Expense accounts',
    'revenue_accounts'                 => 'Revenue accounts',

    'accountExtraHelp_asset'           => '',
    'accountExtraHelp_expense'         => '',
    'accountExtraHelp_revenue'         => '',
    'account_type'                     => 'Account type',
    'save_transactions_by_moving'      => 'Save these transaction(s) by moving them to another account:',

    // categories:
    'new_category'                     => 'New category',
    'create_new_category'              => 'Create a new category',
    'without_category'                 => 'Without a category',
    'update_category'                  => 'Wijzig categorie',
    'categories'                       => 'Categories',
    'edit_category'                    => 'Edit category ":name"',
    'no_category'                      => '(no category)',
    'category'                         => 'Category',
    'delete_category'                  => 'Delete category ":name"',

    // transactions:
    'update_withdrawal'                => 'Update withdrawal',
    'update_deposit'                   => 'Update deposit',
    'update_transfer'                  => 'Update transfer',
    'delete_withdrawal'                => 'Delete withdrawal ":description"',
    'delete_deposit'                   => 'Delete deposit ":description"',
    'delete_transfer'                  => 'Delete transfer ":description"',

    // new user:
    'welcome'                          => 'Welcome to Firefly!',
    'createNewAsset'                   => 'Create a new asset account to get started. ' .
                                          'This will allow you to create transactions and start your financial management',
    'createNewAssetButton'             => 'Create new asset account',

    // home page:
    'yourAccounts'                     => 'Your accounts',
    'budgetsAndSpending'               => 'Budgets and spending',
    'savings'                          => 'Savings',
    'markAsSavingsToContinue'          => 'Mark your asset accounts as "Savings account" to fill this panel',
    'createPiggyToContinue'            => 'Create piggy banks to fill this panel.',
    'newWithdrawal'                    => 'New expense',
    'newDeposit'                       => 'New deposit',
    'newTransfer'                      => 'New transfer',
    'moneyIn'                          => 'Money in',
    'moneyOut'                         => 'Money out',
    'billsToPay'                       => 'Bills to pay',
    'billsPaid'                        => 'Bills paid',
    'viewDetails'                      => 'View details',
    'divided'                          => 'divided',
    'toDivide'                         => 'left to divide',

    // menu and titles, should be recycled as often as possible:
    'toggleNavigation'                 => 'Toggle navigation',
    'currency'                         => 'Currency',
    'preferences'                      => 'Preferences',
    'logout'                           => 'Logout',
    'searchPlaceholder'                => 'Search...',
    'dashboard'                        => 'Dashboard',
    'currencies'                       => 'Currencies',
    'accounts'                         => 'Accounts',
    'Asset account'                    => 'Asset account',
    'Default account'                  => 'Asset account',
    'Expense account'                  => 'Expense account',
    'Revenue account'                  => 'Revenue account',
    'budgets'                          => 'Budgets',
    'tags'                             => 'Tags',
    'reports'                          => 'Reports',
    'transactions'                     => 'Transactions',
    'expenses'                         => 'Expenses',
    'income'                           => 'Revenue / income',
    'transfers'                        => 'Transfers',
    'moneyManagement'                  => 'Money management',
    'piggyBanks'                       => 'Piggy banks',
    'bills'                            => 'Bills',
    'createNew'                        => 'Create new',
    'withdrawal'                       => 'Withdrawal',
    'deposit'                          => 'Deposit',
    'account'                          => 'Account',
    'transfer'                         => 'Transfer',
    'Withdrawal'                       => 'Withdrawal',
    'Deposit'                          => 'Deposit',
    'Transfer'                         => 'Transfer',
    'bill'                             => 'Bill',
    'yes'                              => 'Yes',
    'no'                               => 'No',
    'amount'                           => 'Amount',
    'newBalance'                       => 'New balance',
    'overview'                         => 'Overview',
    'saveOnAccount'                    => 'Save on account',
    'unknown'                          => 'Unknown',
    'daily'                            => 'Daily',
    'weekly'                           => 'Weekly',
    'monthly'                          => 'Monthly',
    'quarterly'                        => 'Quarterly',
    'half-year'                        => 'Every six months',
    'yearly'                           => 'Yearly',

    // reports:
    'reportForYear'                    => 'Yearly report for :year',
    'reportForYearShared'              => 'Yearly report for :year (including shared accounts)',
    'reportForMonth'                   => 'Montly report for :month',
    'reportForMonthShared'             => 'Montly report for :month (including shared accounts)',
    'incomeVsExpenses'                 => 'Income vs. expenses',
    'accountBalances'                  => 'Account balances',
    'balanceStartOfYear'               => 'Balance at start of year',
    'balanceEndOfYear'                 => 'Balance at end of year',
    'balanceStartOfMonth'              => 'Balance at start of month',
    'balanceEndOfMonth'                => 'Balance at end of month',
    'balanceStart'                     => 'Balance at start of period',
    'balanceEnd'                       => 'Balance at end of period',
    'reportsOwnAccounts'               => 'Reports for your own accounts',
    'reportsOwnAccountsAndShared'      => 'Reports for your own accounts and shared accounts',
    'splitByAccount'                   => 'Split by account',
    'balancedByTransfersAndTags'       => 'Balanced by transfers and tags',
    'coveredWithTags'                  => 'Covered with tags',
    'leftUnbalanced'                   => 'Left unbalanced',
    'expectedBalance'                  => 'Expected balance',
    'outsideOfBudgets'                 => 'Outside of budgets',
    'leftInBudget'                     => 'Left in budget',
    'sumOfSums'                        => 'Sum of sums',
    'notCharged'                       => 'Not charged (yet)',
    'inactive'                         => 'Inactive',
    'difference'                       => 'Difference',
    'in'                               => 'In',
    'out'                              => 'Out',
    'topX'                             => 'top :number',
    'showTheRest'                      => 'Show everything',
    'hideTheRest'                      => 'Show only the top :number',
    'sum_of_year'                      => 'Sum of year',
    'average_of_year'                  => 'Average of year',

    // charts:
    'dayOfMonth'                       => 'Day of the month',
    'month'                            => 'Month',
    'budget'                           => 'Budget',
    'spent'                            => 'Spent',
    'overspent'                        => 'Overspent',
    'left'                             => 'Left',
    'noBudget'                         => '(no budget)',
    'maxAmount'                        => 'Maximum amount',
    'minAmount'                        => 'Minumum amount',
    'billEntry'                        => 'Current bill entry',
    'name'                             => 'Name',
    'date'                             => 'Date',
    'paid'                             => 'Paid',
    'unpaid'                           => 'Unpaid',
    'day'                              => 'Day',
    'budgeted'                         => 'Budgeted',
    'period'                           => 'Period',
    'balance'                          => 'Balance',
    'summary'                          => 'Summary',
    'sum'                              => 'Sum',
    'average'                          => 'Average',
    'balanceFor'                       => 'Balance for :name',

    // piggy banks:
    'piggy_bank'                       => 'Piggy bank',
    'new_piggy_bank'                   => 'Create new piggy bank',
    'create_new_piggybank'             => 'Create new piggy bank',
    'account_status'                   => 'Account status',
    'left_for_piggy_banks'             => 'Left for piggy banks',
    'sum_of_piggy_banks'               => 'Sum of piggy banks',
    'saved_so_far'                     => 'Saved so far',
    'left_to_save'                     => 'Left to save',
    'add_money_to_piggy_title'         => 'Add money to piggy bank ":name"',
    'remove_money_from_piggy_title'    => 'Remove money from piggy bank ":name"',
    'add'                              => 'Add',
    'remove'                           => 'Remove',
    'max_amount_add'                   => 'The maximum amount you can add is',
    'max_amount_remove'                => 'The maximum amount you can remove is',
    'update_piggy_button'              => 'Update piggy bank',
    'update_piggy_title'               => 'Update piggy bank ":name"',
    'details'                          => 'Details',
    'events'                           => 'Events',
    'target_amount'                    => 'Target amount',
    'start_date'                       => 'Start date',
    'target_date'                      => 'Target date',
    'no_target_date'                   => 'No target date',
    'todo'                             => 'to do',
    'table'                            => 'Table',
    'piggy_bank_not_exists'            => 'Piggy bank no longer exists.',
    'add_any_amount_to_piggy'          => 'Add money to this piggy bank to reach your target of :amount.',
    'add_set_amount_to_piggy'          => 'Add :amount to fill this piggy bank on :date',
    'delete_piggy_bank'                => 'Delete piggy bank ":name"',

    // tags
    'delete_tag'                       => 'Delete tag ":name"',
    'new_tag'                          => 'Make new tag',
    'edit_tag'                         => 'Edit tag ":tag"',
    'no_year'                          => 'No year set',
    'no_month'                         => 'No month set',
    'tag_title_nothing'                => 'Default tags',
    'tag_title_balancingAct'           => 'Balancing act tags',
    'tag_title_advancePayment'         => 'Advance payment tags',


];

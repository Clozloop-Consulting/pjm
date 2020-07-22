<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('account_subs')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('account_types')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('accounts')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_at', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('auditlogs')
            ->addColumn('table_name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('tableid', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('comment', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('action', 'integer', [
                'comment' => '1 - Add, 2 - Update, 3 - Delete, 4 - View,',
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('banks')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('cheque_registers')
            ->addColumn('cheque_no', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('bank_name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('date_of_cheque', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('amount', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('date_of_presentation', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('towards', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('remarks', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('status', 'integer', [
                'comment' => '0-created
1-passed
2-returned
3-cancled
4-represented',
                'default' => '0',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('bank_hoa', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('bank_shoa', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('cheque_type', 'integer', [
                'comment' => '0-issued
1-received',
                'default' => '0',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('towards_hoa', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('towards_shoa', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('dcbcharts')
            ->addColumn('demand_principle', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('demand_interest', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('collection_principle', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('collection_interest', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('balance_principle', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('balance_interest', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('lan', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('due_date', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('genders')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('journal_type_subs')
            ->addColumn('journal_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('type_name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('is_credit', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('is_debit', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('journal_types')
            ->addColumn('type_name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('is_credit', 'integer', [
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('is_debit', 'integer', [
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('journal_type_subs_exists', 'integer', [
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('hoa_type', 'integer', [
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->create();

        $this->table('journals')
            ->addColumn('lan', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('journal_types_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('t_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('t_desc', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('t_amount', 'float', [
                'default' => '0.00',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('journal_type_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('debit', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('credit', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('parent_body_account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('voucher_book_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('ledgers')
            ->addColumn('lan', 'string', [
                'comment' => 'Loan account number',
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('journal_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('debit', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('credit', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('t_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_diff', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('amount', 'float', [
                'default' => '0.00',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('balance', 'float', [
                'default' => '0.00',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('product', 'float', [
                'default' => '0.00',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('interest', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('t_desc', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('ledger_state', 'integer', [
                'comment' => '0-created
1-approved
2-edit
3-reject
4-edited',
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('journal_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('journal_type_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('parent_body_account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('maker_checker_masters')
            ->addColumn('module_name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('maker_role', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('checker_role', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('maker_checker_transactions')
            ->addColumn('maker_checker_master_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('record_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('status', 'integer', [
                'comment' => '0-created by maker ready for checker
1-approved by maker
2-sent back for edit by checker
3-rejected by checker
4-reversed',
                'default' => '0',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('modules')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('menu_icon', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->create();

        $this->table('notes')
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('parent_type', 'integer', [
                'comment' => '1 - Applicants, 2 - Promoter/Entity/Collateral(Applicant User ), 3 - Property , )',
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('message', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->create();

        $this->table('notifications')
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('task_name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'comment' => '0 - Not read, 1 - Read done',
                'default' => '0',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('onboard_users')
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('mobile', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('gst_no', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('address_line1', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('address_line2', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('landmark', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('pincode_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('user_type', 'integer', [
                'comment' => '13 - Valuator Internal, 14 - Valuator External,  11- Legal Internal, 12 - Legal External, 17 - Financial Internal, 18 - Financial External',
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'comment' => '0 - Not Verified, 1 - Approved, 2 - Rejected',
                'default' => '0',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('approved_amount', 'decimal', [
                'default' => '0.00',
                'null' => false,
                'precision' => 13,
                'scale' => 2,
            ])
            ->addColumn('rejected_amount', 'decimal', [
                'default' => '0.00',
                'null' => false,
                'precision' => 13,
                'scale' => 2,
            ])
            ->addColumn('mise_amount', 'decimal', [
                'default' => '0.00',
                'null' => false,
                'precision' => 13,
                'scale' => 2,
            ])
            ->addColumn('comments', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_external', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('page_accesses')
            ->addColumn('role_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('module_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('sub_module_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('parent_body_accounts')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('branch', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('account_no', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('ifsc_code', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('acc_holder_name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('journal_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('journal_type_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('pincodes')
            ->addColumn('pincode', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('area', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('city', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('state', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->create();

        $this->table('relationships')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('order_by', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('roles')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('statuses')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('sub_ledgers')
            ->addColumn('ledger_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('lan', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('journal_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('debit', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('credit', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('t_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_diff', 'integer', [
                'default' => '0',
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('amount', 'float', [
                'default' => '0.00',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('balance', 'float', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('product', 'float', [
                'default' => '0.00',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('t_desc', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('sub_ledger_state', 'integer', [
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('journal_type_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('parent_body_account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $this->table('sub_modules')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->addColumn('module_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('page_link', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('menu_icon', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('page_action', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('menu_visible', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->create();

        $this->table('titles')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('transaction_type_master')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('type', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $this->table('type_of_concerns')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('concern_type', 'integer', [
                'comment' => '1 - Promoter, 2 - Entity',
                'default' => '1',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('users')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('mobile', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('role_id', 'integer', [
                'default' => '2',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('voucher_books')
            ->addColumn('journal_type_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('journal_type_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('parent_body_account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('lan', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('t_amount', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('is_debit', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('is_credit', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('t_desc', 'string', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('t_date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('account_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('account_sub_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('trans_type', 'integer', [
                'comment' => '0-Cash
1-Transfer
2-Bank',
                'default' => '0',
                'limit' => 5,
                'null' => true,
            ])
            ->create();

        $this->table('workflows')
            ->addColumn('status_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('applicant_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('is_active', 'integer', [
                'default' => '1',
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('created_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('created_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('modified_on', 'timestamp', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'status_id',
                ]
            )
            ->create();
    }

    public function down()
    {
        $this->dropTable('account_subs');
        $this->dropTable('account_types');
        $this->dropTable('accounts');
        $this->dropTable('auditlogs');
        $this->dropTable('banks');
        $this->dropTable('cheque_registers');
        $this->dropTable('dcbcharts');
        $this->dropTable('difference');
        $this->dropTable('genders');
        $this->dropTable('journal_type_subs');
        $this->dropTable('journal_types');
        $this->dropTable('journals');
        $this->dropTable('ledgers');
        $this->dropTable('maker_checker_masters');
        $this->dropTable('maker_checker_transactions');
        $this->dropTable('modules');
        $this->dropTable('notes');
        $this->dropTable('notifications');
        $this->dropTable('onboard_users');
        $this->dropTable('page_accesses');
        $this->dropTable('parent_body_accounts');
        $this->dropTable('pincodes');
        $this->dropTable('relationships');
        $this->dropTable('roles');
        $this->dropTable('statuses');
        $this->dropTable('sub_ledgers');
        $this->dropTable('sub_modules');
        $this->dropTable('titles');
        $this->dropTable('transaction_type_master');
        $this->dropTable('type_of_concerns');
        $this->dropTable('users');
        $this->dropTable('voucher_books');
        $this->dropTable('workflows');
    }
}

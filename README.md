# Transactions
PHP TEST TASK

1. Please create a simple API service with one single method

The method should perform a fake logging of money transactions and return transaction status.
The transaction status should be generated randomly (“rejected” or “approved”).
If it’s not rejected the method should return your random transaction ID and the status.
When it’s rejected the method should return error message with the status.
Please feel free to add more options or more data. 
The main thing – it must be well organized, readable and should work fast.
Your API must have very simple authentication and return data in JSON format only. 

Syntax:
POST /transaction/{email}/{amount}/

Email – user email, amount – sum of transaction (money). 
Those two parameters are must have and must be properly validated.
You shouldn't use a database for it, but sure you can do it if you want (please review item 3 for it).

Example:
Input: POST /transaction/a@a.com/241221.30/
Output: JSON 
{
  "status": "rejected",
  "error_message": "Fraud detected!"
}

2. Create a single page application for using your API

Please, create a simple page where a user can enter email, amount and send it to your API.
You should parse API’s response and show understandable message to a user according to response.
You must use cURL and AJAX here.

3. Write two SQL queries

There is a MySQL database with a table “transactions”.

id 	email	amount	status	create_date
INT, PRIMARY KEY 	VARCHAR(255)	NUMERIC(10,2)	ENUM ('rejected', 'approved')	TIMESTAMP

Please write SQL query (first) for getting a report which will show the sum of all approved transactions for each email within current month.

Please write SQL query (second) to show the report like in the table below.

Email	Monday 	Tuesday	Wednesday	Thursday	Friday	Saturday	Sunday
user@test.com	10000.00	3640.00	20450.23	5550.21	400.00	500.58	300.85

The report must contain the name of a day of the week and the sum of all approved transactions per each day of the week per each email.

4. Please make appropriate data validation.
 
5. Please make sure that you have handled all errors.
 
6. Please make sure your code is well organized and well commented so other developers can easily understand it.

#Pharmacy inventory management system

##Introduction of the system
#####This pharmacy inventory management system is if for the admins and the staffs of the pharmacy store to record down the stocks
#####With this system, it comfortably the workers to check what stocks is less and need to reorder and also to check all the sales daily or monthly.

##Objectives of the project
#####The objectives of the project are:
   * Different privilege for admin and staff
   * Edit drugs' stocks record
   * Check monthly sales
   * View in and out stocks

##Scope to the project
   * Convenience for all kinds of users, with or without IT background
   * This system is designed to keep record of the drugs' stocks
   * Users of this system must be a pharmacist
   * This system is to record down every month's revenue and cost sales

##Contribution of the project
#####With this system, the pharmacist will able to keep track of the drugs with ease. It can check every stocks that available in the inventory and reorder once the stocks are in low quantity. And it also able to find out the drugs movement history. With this, it will avoid over-stocking or under-stocking of drugs. Thus, this will lead to a much better management and cost-management by the pharmacists to control the money used to buy the drugs.

##Conclusion
#####As a conclusion, modern technologies need to combine to assist the pharmacists in order to improve the efficiency of their works. This management system will allow the pharmacy administrators to key in all the drugs product they have into their inventory so that their staffs will easily get the information about the drugs which will easily check by clicking a few clicks in this system to view all details. All in all, this pharmacy inventory system will conclude the pharmacists to works more efficiency and effectively.

##Screenshot
Login page:
![Login](http://i.imgur.com/DPYYlFl.png)

Register page:
![register](http://i.imgur.com/J1uIn04.png)

Staff page:
![Staff profile](http://i.imgur.com/2VfI1zt.png)
![Staff edit profile](http://i.imgur.com/UBVZ85D.png)
![Staff upload image](http://i.imgur.com/mDY9WvS.png)
![Staff search item](http://i.imgur.com/o0pWRgZ.png)
![Staff view item](http://i.imgur.com/UK8ojGe.png)
![Staff item details](http://i.imgur.com/kiN0Cwt.png)

Admin page:
![Admin profile](http://i.imgur.com/plgy3Hp.png)
![Admin edit profile](http://i.imgur.com/S6cRrF5.png)
![Admin add item](http://i.imgur.com/QcOw3Qq.png)
![Admin edit item](http://i.imgur.com/YADlULg.png)
![Admin delete item](http://i.imgur.com/2GZ32p1.png)
![Admin view item](http://i.imgur.com/yAsINR8.png)
![Admin view sales](http://i.imgur.com/j2GTFXh.png)

##How to use this system :
 * Setting up the system:
   1. Install and run xampp. Run both Apache and MySQL.
   2. Go into your xampp directory and choose htdocs. Use git CMD to get the whole repository folder into it.
   3. Go to your browser and type in _**localhost/G14C_Pharmacy-inventory-management-system/homepage.php**_ .
   4. Homepage will appear in browser.

 * STAFF
   1. First and foremost at the login page, if user does not has username and password, user is required to register their own username and password.
   2. After registered, user must key in the username and password and choose the staff radio button.
   3. In the staff page, user is able to edit his/her profile, upload photo of the user, view the drugs, and also search for the drugs by typing in the code.
   4. In Edit profile page, user can change their basic profile.
   5. In the search page, user need to type in the code of the medicine or the name of the medicine in order to get the result of the medicine. After successfully searched for the medicine, user could choose the quantity of the medicine and click the Return Item and Item Sold button. (_If the item is returned by the customers, click Return Item ; If the item is sold to the customers, click Item Sold_)
   6. In the View Item page, user is able to click the medicine to view the details of the medicine which consist of the code of medicine, name, price, quantity and description.
   7. Last but not least, user may log out to exit the session.

 * ADMIN
   1. For the admin a.k.a manager, the default login username is _**admin**_ and password is _**1234**_ and tick the manager radio button in order to login successfully.
   2. In the admin page, user able to edit profile, add item, edit item, delete item, view item and also view item sale.
   3. In Admin Edit Profile page, user able to edit his/her full name and email address only.
   4. In Add Item page, the admin could add the details of the medicine to let staff noticed new medicine is added.
   5. In Edit Item page, user required to key in the code of the medicine or the name of the medicine in order to edit the medicine details.
   6. In Delete Item page, user can delete any medicine which the medicine is not in the inventory anymore by entering the code of the medicine or the name of the medicine.
   7. In View Item page, same as staff, admin able to view the medicine details by clicking the medicine available in the table.
   8. In View Item Sale page, user can check when and how many the medicine was sold daily, monthly, and most frequent item sold in a month.
   7. At last, user may log out to exit the session.

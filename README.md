# Welcome to Project 2 - Fun with Fancy Forms



## Instructions

With our help, our client has been able to grow their business and now needs an IT Support System.
Using Project 1 as a starter spot, build something that looks similar to this (below is only 3 of the pages).
From a technical perspective, here are the requirements:
1. PHP pages with includes for both the HEADER and FOOTER pages.
2. An initial form with 4 fields (title, first_name,last_name, and role).
3. Logic that replicates the flowchart below (note: the 3 different roles).
4. A decision page that displays specific results based on the role selected.
5. Use of GET, POST, and SESSION variables for title, first_name,last_name, and role.






```mermaid
graph TD
A(Start)--> B[/title, first name, last name, role/]
B--> C{role} 
 C --> D[Admin]
    C -->E[Manager]
    C -->F[CEO]
    D -->H[/New Account/]
    D -->G[Pc not working]
    E -->I[/Lost Password/]
    E -->G[Pc not working]
    F -->J[/Phone Number/]
    F-->G[Pc not working]
    
    H-->K[Send Email]
    I-->K[Send Email]
    K --> L(Logout)
    L-->A

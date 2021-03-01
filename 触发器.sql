create?or?replace?trigger?depnumber
after update
on? teacher
foreach?row
begin
update?department?set?department.number=teachers.(count(id))
where department.name=teachers.(department.name);
end;


create?or?replace?trigger?pronumber
after update
on? teacher
foreach?row
begin
update?profession?set?profession.number=teachers.(count(id))
where profession.name=teachers.(profession.name);
end;
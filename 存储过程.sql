create?procedure?numbers()
begin
Select department.name ,profession.name,count(id)
From teacher
Join department on teacher .Id=department.id
Join profession on  teacher.id=profession.id
Group by department.name,profession.name
delimiter $?
end
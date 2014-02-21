pagedTable
==========

一个PHP+Mysql的分页表格


- 总页数 = 总记录数/分页数 【有小数进一】
- sql查询语句 = "SELECT * FROM `{表名}` LIMIT {偏移数 },{分页数 }";
- 偏移数 = （当前页-1） *分页数


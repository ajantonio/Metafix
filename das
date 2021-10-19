[33mcommit b4c95e68497440fb9aef8e21acdd050436491cfd[m[33m ([m[1;36mHEAD -> [m[1;32mmaster[m[33m, [m[1;31morigin/master[m[33m)[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 19:11:54 2021 +0800

    Finished the 'View Orthopedic Technicians' and 'Add Orthopedic Technicians' module

[33mcommit 2fa7ab47d1fe0eea9a229629cf46489795b5336a[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 19:10:38 2021 +0800

    Added 'image' and 'status' column for 'orthopedic_technicians' table

[33mcommit a0307580d7e643b611a8e4b8bb4772f4ed812637[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 19:09:49 2021 +0800

    New manually-typed seeder for 'orthopedic_technicians' table

[33mcommit c087ee7222d14c848d19f1d8c44ed2fc2cbd49b3[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 19:08:19 2021 +0800

    Added routes for 'View Orthopedic Technicians' and 'Add Orthopedic Technicians'

[33mcommit 62d9a924f3e8205c3a3fa1feae1f3182887fa4d8[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 19:03:42 2021 +0800

    Added new links for inventory and technicians management modules
    
    There are 2 new modules added according to our client's request for MVP: 'Add Orthopedic Technicians' and 'View Orthopedic Technicians'. 'Check Orthopedic Implants' module name changed to 'View Inventory'

[33mcommit a2514130172f35301738c07dbc9f6819d8de76f3[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 18:53:44 2021 +0800

    Deleted the factory for orthopedic technician
    
    Manually creating the initial data is faster than automating it with factory and faker. Because there are only 5 records needed for the orthopedic technician table

[33mcommit 1d43642963b5b5a2bd4b74c8ecdadae0d02e8aba[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 11:26:17 2021 +0800

    Initial data changed for 'grades_id' column to rand(1, 2)
    
    The prior value for this column was set to null, but since the 'orthopedic_implants' table serves as the inventory of the application, the grades for each implant in this table should be not nullable

[33mcommit a6c257f817e2673ef07b95d04546285d9a0289b7[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 10:46:29 2021 +0800

    Added model, migration, and seeder for the newly created 'grades' table

[33mcommit 4dd65e82cb6febb6f82bff6873cb7bda843faeb6[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 10:45:26 2021 +0800

    Deleted models, migrations, and seeders for 'plate_grades' and 'screw_grades' table because these tables are non-existing

[33mcommit ac527129967d04494a1d31229d341db32706c17f[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 08:50:37 2021 +0800

    Added 'Add to Cart' feature

[33mcommit 60e59749f54994b4627581693a6400a7d19b5adf[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 08:49:13 2021 +0800

    Removed the shopping cart icon

[33mcommit 9cc80fd0c4c970a7246afede224a48ede9eace00[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 08:46:36 2021 +0800

    Added columns as fillable

[33mcommit 5a41c154a1abdcdd157c515629126d3f7e04dd68[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 08:44:49 2021 +0800

    Removed 'image' column as fillable

[33mcommit dfad57f00e42928a95d69cb9e04abf128d7f9028[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Mon Oct 18 08:40:11 2021 +0800

    Third time modification for migrations and seeders

[33mcommit 5cca3e92fb4fbf523b3d9882de5a70998c900a03[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Wed Oct 13 09:13:56 2021 +0800

    Installed fontawesome, added icon, fixed UI, added 'price' column, and removed 'screw_price' and 'plate_price' column

[33mcommit 75a0ec0a30a6d68a25e6e0637fbf5e42072fc666[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Fri Oct 8 12:27:03 2021 +0800

    Modified migrations and seeders

[33mcommit 2c3d647c0da5a1ba648eacbaaf6c877ff643efc7[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Wed Oct 6 09:35:45 2021 +0800

    Login authentication for doctors and admin with middleware

[33mcommit 6238d171e8b329568e9ddacbb94bad724b769bd1[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Wed Oct 6 08:19:51 2021 +0800

    UI general layout

[33mcommit 39d0fef3211bfc7003b2d6dc308d88ef9ae25d88[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Thu Sep 30 17:34:29 2021 +0800

    Created migration

[33mcommit 416c78ceccb0579c4dc7a2f57ac59679c896f6d7[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Thu Sep 30 16:25:35 2021 +0800

    Laravel Scaffolding

[33mcommit 3a1829c76115c5e1d5a14479d512d29b15fdfee3[m
Author: ajantonio <ajantonio01@yahoo.com>
Date:   Thu Sep 30 16:22:28 2021 +0800

    Initialized Project

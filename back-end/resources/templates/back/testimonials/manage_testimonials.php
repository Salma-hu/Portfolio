<?php delete_testimonials(); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Manage your testimonials 
                    <div class="page-title-subheading">here you can modify your testimonials 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">testimonials list</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>thumbnail</th>
                                <th>full Name</th>
                                <th>description</th>
                                <th>role</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php display_testimonials_admin() ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const delete_buttons = document.querySelectorAll('#PopoverCustomT-1');
    for(const el of delete_buttons ){
        el.addEventListener('click', (e) => {
        let link = e.currentTarget.value;
        document.querySelector('.deletion_link').href = link;
        });
    }
</script>
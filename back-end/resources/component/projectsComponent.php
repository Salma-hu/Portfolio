<?php


function display_projects(){
    global $pdo;
    try{
    $sql ="SELECT p.link, p.cover, m.file_location FROM projects p join media m on p.cover = m.id";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $projects){
        echo <<<projects
                    <div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="uploads/{$projects->file_location}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="{$projects->link}" data-rel="#" class="hoverbutton global-radius"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>

projects;
    }
    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}
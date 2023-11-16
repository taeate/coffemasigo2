
<?php $this->load->view('layout/header'); ?>

<div class="flex-container" style="display: flex; margin: 400px;">
    <!-- 사이드바 -->
    <div class="w-80">
        <?php $this->load->view('layout/sidebar'); ?>
    </div>
    <!-- <body class="mt-96"> -->
    <div class="content ml-8" style="flex: 3;">
        <div class="flex flex-col w-full ">
            <div class="h-auto bg-base-100">
                <div name="title" class="mt-8 ml-12 mr-12">
                    
               
                   
                        <?php if($before_data): ?>
                            <?php $title = $before_data->title; ?>
                            <?php $content = $before_data->content; ?>
                            
                           
                      
                        <div class="flex justify-normal mb-2">
                            <div class="flex flex-none">
                                <div class="mt-2 text-2xl">
                                    <?php echo $title; ?>
                                </div>
                     
                            </div>
                            <div class="grow"></div>
                            <div class="flex flex-none">

                            <div class="form-control mr-4">
                                <label class="cursor-pointer label">
                                    <input type="checkbox" checked="checked" class="checkbox checkbox-accent" />
                                    <span class="label-text ml-1">공지로등록</span>
                                </label>
                            </div>

                            <div class="form-control ml-4">
                                <label class="cursor-pointer label">
                                    <input type="checkbox" checked="checked" class="checkbox checkbox-accent" />
                                    <span class="label-text ml-1">전체공개</span>
                                </label>
                            </div>

                            </div>
                        </div>
                        <div class="mt-2">
                            <select class="select select-bordered w-28 h-4 max-w-xs mt-2">
                            <option disabled selected>채널선택</option>
                            <option>자유</option>
                            <option>PYTHON</option>
                            <option>JAVA</option>
                            <option>PHP</option>
                            <option>C++</option>
                            </select>
                        </div>

                        <form method="POST" class="mt-8">
                            <div class="mb-6">
                                <label for="title" class="block mb-2 font-bold text-gray-900 dark:text-white text-lg">제목</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $title; ?>">
                            </div>
                            <div class="mb-6">
                

                                <label for="content" class="block mb-2 font-bold text-gray-900 dark:text-white text-lg">내용</label>
                               
                                <textarea class="h-36" type="text" name="content" id="content"><?php echo $content; ?></textarea>

                                
                            </div>

                            <div class="flex justify-between">
                                <div class="mt-2">
                                    <div class="ml-2 mb-2">* 파일 크기는 250kb 이하여야 합니다.</div>
                                    <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
                                </div>
                                <div>
                                    <button type="submit" class="bg-gray-500 text-white w-24 h-12 rounded">취소</button>
                                    <button type="submit" class="bg-gray-500 text-white w-24 h-12 rounded">작성</button>
                                </div>
                            </div>

                           
                        </form>
                    
                        <?php endif; ?>
                </div>

                <div name="content " class="">
                    <div class="m-12">
                        

                       
                    </div>
                </div>
              
               
            </div>
           
        </div>
        
 

                         

                        


        </body>
    </div>
</div>


<script>
  ClassicEditor.create( document.querySelector( '#content' ), {
    
    language: "ko"
  } )
</script>
<style>
	.ck.ck-editor {
    	
	}
	.ck-editor__editable {
	    min-height: 200px;
	}
</style>
 
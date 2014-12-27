<title>Online Application Form</title>

<body>
<form action ="add.php"method="post">
    <h3>Training Information: </h3></br>
    <h4>Training Details: </h4></br>
    ID:<input type="number"name="ID"></br>
    Training Title: <input type="text"name="tTitle"></br>
    Training Description:
    <textarea rows="5"cols="10"name="tDescription">
    </textarea>
    </br>
    Institute :<input type="text"name="institute"></br>
    Address:<textarea rows="5"cols="10"name="address">
    </textarea>
    </br>

    Training Area: <input type="text"name="tArea"></br>
    Training Duration: <input type="text"name="tDuration"></br>

    <h4>Course Details: </h4></br>
    Start Date: <input type="text"name="startDate"></br>
    End Date: <input type="text"name="endDate"></br>
    Course Title: <input type="text"name="courseTitle"></br>
    Trainer detail:<textarea rows="5"cols="10"name="trainerDetail">
    </textarea>
    </br>


    <input type="submit"value="Submit">
</form>
</body>
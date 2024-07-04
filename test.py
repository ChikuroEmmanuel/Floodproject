import pandas as pd
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score, recall_score, roc_auc_score
from sklearn import preprocessing
import pickle
from flask import Flask, request, jsonify, render_template

# Load your dataset
data = pd.read_csv("kerala.csv")

# Preprocess your data
data['FLOODS'].replace(['YES', 'NO'], [1, 0], inplace=True)
x = data[[' ANNUAL RAINFALL']]
y = data['FLOODS']

# Scale your data
minmax = preprocessing.MinMaxScaler(feature_range=(0, 1))
x_scaled = minmax.fit_transform(x)

# Train-test split
x_train, x_test, y_train, y_test = train_test_split(x_scaled, y, test_size=0.2)

# Train your model
dtc_clf = DecisionTreeClassifier()
dtc_clf.fit(x_train, y_train)

# Save the model using pickle
with open("floodmodel.pickle", "wb") as f:
    pickle.dump(dtc_clf, f)
with open("scaler.pickle", "wb") as f:
    pickle.dump(minmax, f)

# Flask App
app = Flask(__name__)

# Load the model in memory
with open("floodmodel.pickle", "rb") as f:
    dtc_clf = pickle.load(f)
with open("scaler.pickle", "rb") as f:
    minmax = pickle.load(f)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/predict', methods=['POST'])
def predict_flood():
    # Get the input data from the request
    data = request.get_json()
    input_data = pd.DataFrame(data)

    # Scale the input data using the same MinMaxScaler used in training
    input_data_scaled = minmax.transform(input_data)

    # Make a prediction using the loaded model
    prediction = dtc_clf.predict(input_data_scaled)

    # Return the prediction result as JSON
    return jsonify({'prediction': int(prediction[0])})




if __name__ == '__main__':
    app.run(debug=True)

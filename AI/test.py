import nltk
from nltk.stem.lancaster import LancasterStemmer
stemmer = LancasterStemmer()

import numpy
import tflearn
import tensorflow
import random
import json
import pickle

import sys


try:
   # inp = sys.argv[1]
    inp = 'hi'
    print(inp)
except Exception as e:
    print(e)